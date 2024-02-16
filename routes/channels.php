<?php

useIlluminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
|BroadcastChannels
|--------------------------------------------------------------------------
|
|Hereyoumayregisteralloftheeventbroadcastingchannelsthatyour
|applicationsupports.Thegivenchannelauthorizationcallbacksare
|usedtocheckifanauthenticatedusercanlistentothechannel.
|
*/

Broadcast::channel('App.Models.User.{id}',function($user,$id){
return(int)$user->id===(int)$id;
});
