<?php

namespace App\Http\Controllers\Pages\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\Contact\StoreRequest;
use App\Mail\Pages\Contact\AdminMail;
use App\Mail\Pages\Contact\UserMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

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
                'message' => 'Contact message successfully received.',
            ],
        ]);
    }
}
