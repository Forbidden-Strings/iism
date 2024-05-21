echo "Deploying Application";
php $HOME/public_html/artisan migrate --force;
php $HOME/public_html/artisan optimize;
php $HOME/public_html/artisan config:cache;
php $HOME/public_html/artisan event:cache;
php $HOME/public_html/artisan route:cache;
php $HOME/public_html/artisan view:cache;
