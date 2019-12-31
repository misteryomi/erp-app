<div class="profile-sidebar">
    <!-- PORTLET MAIN -->
    <div class="portlet light profile-sidebar-portlet " style="
    background-color:  #f2f2f2;
    ">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">

        <center>{!!  get_avatar(
        $appraisal_user->ID) !!}</center>
    </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> {{ ucwords($appraisal_user->display_name) }}  </div>
                <div class="profile-usertitle-job"> {{ strtolower($appraisal_user->email) }} </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                {{--   <div class="profile-userbuttons">
                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                    <button type="button" class="btn btn-circle red btn-sm">Message</button>
                </div>--}}
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                      <!--   <li class="active">
                            <a href="#">
                                <i class="icon-home"></i>Gender: {{ strtolower($appraisal_user->sex) }} </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-settings"></i> {{ ucwords($appraisal_user->department) }} </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-person"></i> {{ ucwords($appraisal_user->sub_unit) }} </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-file"></i> {{ ucwords($appraisal_user->level) }} </a>
                                        </li>-->
                                    </ul>


<center>Total Score: <br /> <span class="sum" style="font-size: 45px; "> </span>

</center>

                                </div>
                                <!-- END MENU -->
                            </div>
                            <!-- END PORTLET MAIN -->
                            <!-- PORTLET MAIN -->



<script>/*
$("table input").on('change blur input', function () {
                    var val = this.value;
                    
                    alert(val);
                    var sum = 0;
                    $(this).closest('tr').find('td:eq(0)').val(function () {
                                                                return (+$.trim($(this).siblings(':eq(3)').text()) * +val/100)
                                                                });
                    $('table  tr td:nth-of-type(5)').each(function () {
                                                          sum += parseFloat($(this).text()) || 0;
                                                          });
                    $('.sum').text(sum+20);
                    });

*/

$("table input").on('change blur input', function () {
                    var val = this.value;
                    var sum = 0;
                    $(this).closest('tr').find('td:eq(0)').text(function () {
                                                                return (+$.trim($(this).closest('tr').find('td:eq(3)').text()) * +val/100)
                                                                });
                    $('table  tr td:nth-of-type(1)').each(function () {
                                                          sum += parseFloat($(this).text()) || 0;
                                                          });
                    $('.sum').text(sum+20).substring(1, 4);
                    });
</script>

                <!-- END PORTLET MAIN -->
                        </div>
