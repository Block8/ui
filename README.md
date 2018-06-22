Laravel package providing a simple, clean, admin user interface.

###Configuration:

#####1) UI Theme Primary Colour
To change the default colour of the UI Package simply add the `$color-primary` variable
at your app's dashboard.scss file.
```
$color-primary: "your-color";
```

#####2) Brand Logo
To load a brand logo on top of sidebar simply declare the `logo` before extending the layout
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

There are 3 types of alerts. Warning, danger and success. Declare the `type` variable and the `icon` of you choice

```
@section('alerts')
    @component('ui::alert')
        @slot('type', 'warning')
        @slot('icon', 'exclamation-circle')
                
        This is a bold <strong>alert</strong>.
    @endcomponent
@endsection
```

##### 2) Alert-banner

You can show alert banners at the top of the main panel by adding `alert-banner` components into the `alert-banners` section.

```
@section('alert-banners')
    @component('ui::alert-banner')
        @slot('type', 'warning')
        @slot('icon', 'exclamation-circle')
        
        Hi <strong>{{ $user->name }}</strong>, your subscription is about to end.
    @endcomponent
@endsection
```