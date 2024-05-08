<?php

namespace App\Http\Controllers\Pages\Home;

use App\Models\Contact;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Mail\Pages\Home\UserMail;
use App\Mail\Pages\Home\AdminMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\Home\StoreRequest;

class StoreController extends Controller
{
    /**
     * BCC (Blank Carbon Copy).
     *
     * @var array
     */
    protected $bcc = [
        'priyanshunegi3668@gmail.com',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data = $this->processData($data);

        $contact = Contact::create($data);

        Mail::to($data['email'])->send(
            new UserMail($contact->toArray())
        );

        collect([
            'contact@iismstockmarketlearning.in'
        ])->each(
            fn (string $address) => Mail::to($address)->bcc($this->bcc)->send(
                new AdminMail($contact->toArray())
            )
        );

        return redirect()->back()->withInput([
            'date' => collect($contact->toArray())->except('id'),
            'status' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'Enrollment successfully received.',
            ],
        ]);
    }

    /**
     * Process data before using.
     * 
     * @param array $data
     * @return array
     */
    protected function processData(array $data): array
    {
        $app = env('APP_NAME');
        $email = $data['email'];
        $phone = $data['phone_number'];
        $firstName = Str::before($data['full_name'], " ");
        $lastName = Str::after($data['full_name'], " ");

        return array_merge(
            Arr::except($data, ['full_name']),
            [
                'subject' => "Enrollment in {$app} Trading Program",
                'first_name' => $firstName, 'last_name' => $lastName,
                'message' => <<<EOD
                    Dear $app Team,

                    I hope this email finds you well.
                    My name is $firstName $lastName, and I am excited
                    to express my interest in enrolling in the $app trading program.

                    After carefully reviewing the program details 
                    on your website, I am confident that this course 
                    aligns perfectly with my career aspirations in the trading world.

                    Please guide me on the next steps for enrollment.
                    I look forward to joining the $app community and
                    embarking on this exciting learning journey.
                    
                    Thank you for your attention, and I eagerly await your response.

                    Best regards,
                    $firstName $lastName $phone $email
                EOD
            ],
        );
    }
}
