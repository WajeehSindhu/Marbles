@if(Auth::guard('web')->check())
<p class="text-success">
    You are logged in as an User
</p>
@else
<p class="text-danger">
    You are logged out as an User
</p>
@endif
@if(Auth::guard('admin')->check())
<p class="text-success">
    You are logged in as an Admin
</p>
@else
<p class="text-danger">
    You are logged out as an Admin
</p>
@endif
@if(Auth::guard('shopkeeper')->check())
<p class="text-success">
    You are logged in as a Shopkeeper
</p>
@else
<p class="text-danger">
    You are logged out as a Shopkeeper
</p>
@endif