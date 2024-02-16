<?php

namespaceApp\Models;

//useIlluminate\Contracts\Auth\MustVerifyEmail;
useIlluminate\Database\Eloquent\Factories\HasFactory;
useIlluminate\Foundation\Auth\UserasAuthenticatable;
useIlluminate\Notifications\Notifiable;
useLaravel\Sanctum\HasApiTokens;

classUserextendsAuthenticatable
{
useHasApiTokens,HasFactory,Notifiable;

/**
*Theattributesthataremassassignable.
*
*@vararray<int,string>
*/
protected$fillable=[
'name',
'email',
'password',
];

/**
*Theattributesthatshouldbehiddenforserialization.
*
*@vararray<int,string>
*/
protected$hidden=[
'password',
'remember_token',
];

/**
*Theattributesthatshouldbecast.
*
*@vararray<string,string>
*/
protected$casts=[
'email_verified_at'=>'datetime',
];
}
