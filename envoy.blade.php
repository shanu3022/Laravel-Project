@servers(['web' => 'digitalocean'])

@task('deploy', ['on' => 'web'])
    cd /var/www/myapp
    git pull origin main
    php artisan migrate --force
    php artisan optimize:clear
@endtask
