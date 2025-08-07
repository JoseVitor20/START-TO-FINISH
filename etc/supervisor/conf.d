[program:laravel-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /home1/josev797/public_html/starttofinish.com.br/artisan queue:work --tries=3 --daemon
autostart=true
autorestart=true
user=josev797  ; Alterado para o seu usuário
numprocs=1
redirect_stderr=true
stdout_logfile=/home1/josev797/public_html/starttofinish.com.br/storage/logs/supervisor.log