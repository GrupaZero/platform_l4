@extends('layouts.sidebarLeft')

@section('title')
    @lang('common.edit')
@stop

@section('sidebarLeft')
    @include('account.menu', ['menu' => $menu])
@stop

@section('content')
    <h1 class="page-header">@lang('common.edit')</h1>

   <div class="row">
       <div class="col-md-4">
           <form id="edit-account-form" action="#" method="post" role="form">
               <div class="form-group">
                   <label for="firstName">@lang('common.firstName')</label>
                   <input type="text" id="firstName" name="firstName" class="form-control" value="{{ $user->firstName }}">
               </div>
               <div class="form-group">
                   <label for="lastName">@lang('common.lastName')</label>
                   <input type="text" id="lastName" name="lastName" class="form-control" value="{{ $user->lastName }}">
               </div>
               @if(strpos($user->email,'social_') == false)
                   <div class="form-group">
                       <label for="password">@lang('common.password')</label>
                       <input type="password" id="password" name="password" class="form-control">
                   </div>
               @endif
               <button id="edit-account" type="submit" class="btn btn-primary">@lang('common.save')</button>
           </form>
       </div>
   </div>

    <script>
        $(function () {
            $('#edit-account').click(function (event) {
                event.preventDefault();
                Loading.start('body');
                $.ajax({
                    url: "/en/api/v1/account/ <?php echo $user->id;?>",
                    data: $('#edit-account-form').serializeObject(),
                    type: 'PUT'
                }).done(function () {
                    Loading.stop();
                    $(this).addClass("done");
                });
            });
        });
    </script>
@stop
