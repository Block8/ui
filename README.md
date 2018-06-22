Laravel package providing a simple, clean, admin user interface.

###Configuration:

#####1) UI Theme Primary Colour
To change the default colour of the UI Package simply add the below variable
at your app's dashboard.scss file.
```
$color-primary: "your-color";
```

#####2) Brand Logo
To load a brand logo on top of sidebar simply declare the variable before extending the layout
```
Example: 
@php($logo = Storage::url($currentClient->logo))
@extends('ui::layouts.primary')
```
#####3) Notifications
To enable laravel notifications module you simply need to:

a. Declare the notifications before extending the layout
```
Example: 
@php($notifications = Auth::user()->unreadNotifications)
@extends('ui::layouts.primary')
```

b. Make a NotificationController on your app for handling the notifications 
index page and return your custom view.

c. Register the routes at your web.php file.

```
Example: 
Route::get('/notifications', 'NotificationController@index')->name('notification.index');
Route::get('/notification/{notification}', '\Block8\UI\Http\Controllers\NotificationController@show')->name('notification.show');
Route::get('/notification/read-all/{user}', '\Block8\UI\Http\Controllers\NotificationController@markAllRead')->name('notification.mark-all-read'); 
```

###Components

##### 1) Alerts

There are 2 types of alerts. Warning and Danger. Select which you want by declaring the 'type' variable
and select if you want the icon on top of the bar by declaring the 'icon' variable true.

```
@section('alerts')
    @component('ui::alert')
        @slot('icon', true)
        @slot('type', 'warning')
                
        This is a bold <strong>alert</strong>.
    @endcomponent
@endsection
```

##### 2) Warnings

You can show warnings at the top of the main panel by adding alert components into the warnings section.

```
@section('warnings')
    @component('ui::warning')
        Hi <strong>{{ $user->name }}</strong>, your subscription is about to end.
    @endcomponent
@endsection
```