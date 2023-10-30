
<?php
use Illuminate\Notification\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatabale;
class Admin extends Authenticatabale
{
    use Notifiable;
    protected $guard = "admin"; 
    protected $fillable = ["name","email","password",];
    protected $hidden = ["password","remember_token",];
} 





?>