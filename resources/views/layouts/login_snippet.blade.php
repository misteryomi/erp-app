    <?php
use App\User;

        #  header( 'cache-control', 'no-store,no-cache,must-revalidate' );
        # header( 'pragma', 'no-cache' );
        # header( 'expires', '0' );



?>
<?php /* ?>
@if(isset(Auth::user()->ID))

    @if(Auth::user()->ID != get_current_user_id())

<?php Auth::logout(); ?>
<?php Session::flush(); ?>

    <?php  Auth::loginUsingId( "".get_current_user_id()."", true); ?>

    @endif


@else

<?php Auth::logout(); ?>
<?php Session::flush(); ?>
 <?php  Auth::loginUsingId( "".get_current_user_id()."", true); ?>

@endif

*/ ?>
