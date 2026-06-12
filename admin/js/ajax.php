<?php

include_once("../process/process.php");

//echo "=======";
//print_r($_POST);
if ($_POST["act"] == "login") {

    $result = $process->login($_POST);
    echo $result;
}
if ($_POST["act"] == "add_menu") {


    $result = $process->add_menu($_POST);
    //echo $result;
    if ($result == 1)
        echo "true";
    else
        echo "false";
}
if ($_POST["act"] == "edit_menu") {

    $result = $process->edit_menu($_POST);
    echo $result;
    if ($result == "true")
        echo "true";
    else
        echo "false";
}
/////////////////////MENU STARTS/////////////////////
if ($_POST["act"] == "get_menu_list") {
    echo $result = $process->get_menu("0");
}

if ($_POST["act"] == "change_menu_status") {
    $process->change_menu_status($_POST["id"]);
    echo '<option value="0">Root</option>' . $result = $process->get_menu_drop();
}
if ($_POST["act"] == "get_menu_position_drop") {
    //$process-> get_menu_position_drop($_POST["pid"]);
    echo $result = $process->get_menu_position_drop($_POST["id"]);
}
if ($_POST["act"] == "edit_menu_drop") {
    echo $result = $process->edit_menu_drop($_POST["id"]);
}
if ($_POST["act"] == "edit_menu_position_drop") {
    echo $result = $process->edit_menu_position_drop($_POST["id"]);
}

if ($_POST["act"] == "delete_menu") {
    echo $result = $process->delete_menu($_POST["id"]);
}
/////////////////////PAGE STARTS/////////////////////

if ($_POST["act"] == "add_page") {
    echo $id = $process->add_page($_POST);
}
if ($_POST["act"] == "edit_page") {
    echo $id = $process->edit_page($_POST);
}
if ($_POST["act"] == "move_page_to_trash") {
    $result = $process->move_page_to_trash($_POST["page"]);
}
if ($_POST["act"] == "restore_from_trash") {
    echo $result = $process->restore_from_trash($_POST["page"]);
}
if ($_POST["act"] == "delete_page_from_trash") {
    echo $result = $process->delete_page_from_trash($_POST["page"]);
}


/////////////////////PAGE ENDS/////////////////////
/////////////////////IMAGE GALLERY STARTS/////////////////////
if ($_POST["act"] == "move_gall_category_to_trash") {
    $result = $process->move_gall_category_to_trash($_POST["category"]);
}
if ($_POST["act"] == "restore_gall_category_from_trash") {
    echo $result = $process->restore_gall_category_from_trash($_POST["category"]);
}
if ($_POST["act"] == "delete_gall_category_from_trash") {
    echo $result = $process->delete_gall_category_from_trash($_POST["category"]);
}
if ($_POST["act"] == "get_gall_directory") {
    $dir = $process->get_gall_directory($_POST["dir"]);
    $_SESSION["cat_id"] = $_POST["dir"];
    echo $_SESSION["dir"] = $dir;
}


if ($_POST["act"] == "move_image_to_trash") {
    $result = $process->move_image_to_trash($_POST["image"]);
}


if ($_POST["act"] == "restore_image_from_trash") {
    $result = $process->restore_image_from_trash($_POST["image"]);
}
if ($_POST["act"] == "delete_image_from_trash") {
    $result = $process->delete_image_from_trash($_POST["image"]);
}

if ($_POST["act"] == "add_caps") {
    $result = $process->add_caps($_POST);
}

/////////////////////IMAGE GALLERY ENDS/////////////////////
/////////////////////VIDEO GALLERY STARTS/////////////////////

if ($_POST["act"] == "move_video_to_trash") {
    echo $result = $process->move_video_to_trash($_POST["video"]);
}
if ($_POST["act"] == "restore_video_from_trash") {
    echo $result = $process->restore_video_from_trash($_POST["video"]);
}
if ($_POST["act"] == "delete_video_from_trash") {
    $result = $process->delete_video_from_trash($_POST["video"]);
}
/////////////////////VIDEO GALLERY ENDS/////////////////////
/////////////////////SLIDER  STARTS/////////////////////

if ($_POST["act"] == "move_slider_to_trash") {
    echo $result = $process->move_slider_to_trash($_POST["slider"]);
}
if ($_POST["act"] == "restore_slider_from_trash") {
    echo $result = $process->restore_slider_from_trash($_POST["slider"]);
}
if ($_POST["act"] == "delete_slider_from_trash") {
    $result = $process->delete_slider_from_trash($_POST["slider"]);
}
/////////////////////SLIDER  ENDS/////////////////////
/////////////////////SLIDER IMAGE STARTS/////////////////////

if ($_POST["act"] == "move_slide_img_to_trash") {
    echo $result = $process->move_slide_img_to_trash($_POST["slide_img"]);
}
if ($_POST["act"] == "restore_slide_img_from_trash") {
    echo $result = $process->restore_slide_img_from_trash($_POST["slide_img"]);
}
if ($_POST["act"] == "delete_slide_img_from_trash") {
    $result = $process->delete_slide_img_from_trash($_POST["slide_img"]);
}
/////////////////////SLIDER IMAGE ENDS/////////////////////		
////////////////////////NEWS STARTS/////////////////////

if ($_POST["act"] == "move_news_to_trash") {
    echo $result = $process->move_news_to_trash($_POST["news"]);
}
if ($_POST["act"] == "restore_news_from_trash") {
    echo $result = $process->restore_news_from_trash($_POST["news"]);
}
if ($_POST["act"] == "delete_news_from_trash") {
    $result = $process->delete_news_from_trash($_POST["news"]);
}
////////////////////////NEWS ENDS/////////////////////
////////////////////////CIRCULAR STARTS/////////////////////
if ($_POST["act"] == "move_circular_to_trash") {
    echo $result = $process->move_circular_to_trash($_POST["circular"]);
}
if ($_POST["act"] == "restore_circular_from_trash") {
    echo $result = $process->restore_circular_from_trash($_POST["circular"]);
}
if ($_POST["act"] == "delete_circular_from_trash") {
    $result = $process->delete_circular_from_trash($_POST["circular"]);
}

////////////////////////CIRCULAR ENDS/////////////////////		
////////////////////////EVENT STARTS/////////////////////	

if ($_POST["act"] == "move_event_to_trash") {
    echo $result = $process->move_event_to_trash($_POST["event"]);
}
if ($_POST["act"] == "restore_event_from_trash") {
    echo $result = $process->restore_event_from_trash($_POST["event"]);
}
if ($_POST["act"] == "delete_event_from_trash") {
    $result = $process->delete_event_from_trash($_POST["event"]);
}
if ($_POST["act"] == "show_on_home") {
    //print_r($_POST);
    $result = $process->show_on_home($_POST["event"], $_POST["show"]);
}

////////////////////////EVENT ENDS/////////////////////
//////////////////////// FB Gallery STARTS/////////////////////	

if ($_POST["act"] == "move_fb_gallery_to_trash") {
    echo $result = $process->move_fb_gallery_to_trash($_POST["event"]);
}
if ($_POST["act"] == "restore_fb_gallery_from_trash") {
    echo $result = $process->restore_fb_gallery_from_trash($_POST["event"]);
}
if ($_POST["act"] == "delete_fb_gallery_from_trash") {
    $result = $process->delete_fb_gallery_from_trash($_POST["event"]);
}
if ($_POST["act"] == "show_fb_gallery_on_home") {
    //print_r($_POST);
    $result = $process->show_fb_gallery_on_home($_POST["event"], $_POST["show"]);
}

////////////////////////FB Gallery ENDS/////////////////////
//////////////////////CALANDER STARTS/////////////////////	

if ($_POST["act"] == "move_calendar_background_event_to_trash") {
    echo $result = $process->move_calendar_background_event_to_trash($_POST["background_event"]);
}

if ($_POST["act"] == "move_calendar_short_event_to_trash") {
    echo $result = $process->move_calendar_short_event_to_trash($_POST["short_event"]);
}

if ($_POST["act"] == "move_regular_event_to_trash") {
    echo $result = $process->move_regular_event_to_trash($_POST["regular_event"]);
}

if ($_POST["act"] == "show_lable") {
    echo $result = $process->show_lable($_POST["value"], $_POST["lable_id"]);
}
////////////////////////////////Download ////////////////////////////////////////
if ($_POST["act"] == "move_download_to_trash") {
    echo $result = $process->move_download_to_trash($_POST["download"]);
}

if ($_POST["act"] == "restore_downloads_from_trash") {
    echo $result = $process->restore_download_from_trash($_POST["download"]);
}
if ($_POST["act"] == "delete_download_from_trash") {
    echo $result = $process->delete_download_from_trash($_POST["download"]);
}

////////////////////////POPUP STARTS/////////////////////	

if ($_POST["act"] == "move_popup_to_trash") {
    echo $result = $process->move_popup_to_trash($_POST["popup"]);
}
if ($_POST["act"] == "restore_popup_from_trash") {
    echo $result = $process->restore_popup_from_trash($_POST["popup"]);
}
if ($_POST["act"] == "delete_popup_from_trash") {
    $result = $process->delete_popup_from_trash($_POST["popup"]);
}

if ($_POST["act"] == "show_popup") {
    $result = $process->show_popup($_POST["popup"]);
}
///////////////////////////////Job///////////

if ($_POST["act"] == "move_job_to_trash") {
    echo $result = $process->move_job_to_trash($_POST["job"]);
}

if ($_POST["act"] == "restore_job_from_trash") {
    echo $result = $process->restore_job_from_trash($_POST["job"]);
}
if ($_POST["act"] == "delete_job_from_trash") {
    echo $result = $process->delete_job_from_trash($_POST["job"]);
}

//////////////////////////////TC ///////////////////////////////
if ($_POST["act"] == "delete_tc_from_trash") {
    echo $result = $process->delete_tc_from_trash($_POST["tc"]);
}

if ($_POST["act"] == "move_tc_to_trash") {
    echo $result = $process->move_tc_to_trash($_POST["tc"]);
}

if ($_POST["act"] == "restore_tc_from_trash") {
    echo $result = $process->restore_tc_from_trash($_POST["tc"]);
}

if ($_POST["act"] == "check_user_name") {
    echo $result = $process->check_user_name($_POST["user"]);
}
if ($_POST["act"] == "assign_permission") {
    echo $result = $process->assign_permission($_POST["user_id"], $_POST["menu_id"]);
}
if ($_POST["act"] == "remove_permission") {
    echo $result = $process->remove_permission($_POST["user_id"], $_POST["menu_id"]);
}
if ($_POST["act"] == "change_user_status") {
    echo $result = $process->change_user_status($_POST["user_id"], $_POST["status"]);
}
if ($_POST["act"] == "reload_activity") {
    $i = 0;
    $res = "";
    $result = $process->get_all_logs();

    //echo $result;
    while ($row = mysqli_fetch_array($result)) {
        $i++;

        $res = $res . '<li><span class="user">' . $name = $process->get_user_name($row['USER_ID']) . '</span> <p>' . $row['ACTIVITY'] . '</p> <span class="time">' . date('j/n/Y [h:i:s]', $row['ADDEDON']) . '</span></li>';
    }
    echo $res;
}
if ($_POST["act"] == "change_status_to_read") {
    $result = $process->change_status_to_read($_POST["id"]);
}
if ($_POST["act"] == "change_status_to_unread") {
    $result = $process->change_status_to_unread();
}
if ($_POST["act"] == "change_status_of_resume") {
    $result = $process->change_status_of_resume();
}


////////////////////////School Event/////////////////////get_gall_directory	
if ($_POST["act"] == "make_top") {
    $result = $process->check_login();
    $result = $process->make_top_seimg($_POST);
}
if ($_POST["act"] == "make_top_ig") {
    $result = $process->check_login();
    $result = $process->make_top_igimg($_POST);
}
if ($_POST["act"] == "make_top_bt") {
    $result = $process->check_login();
    $result = $process->make_top_btimg($_POST);
}
if ($_POST["act"] == "make_top_acc") {
    $result = $process->check_login();
    $result = $process->make_top_accimg($_POST);
}
if ($_POST["act"] == "make_top_crt") {
    $result = $process->check_login();
    $result = $process->make_top_crtimg($_POST);
}

if ($_POST["act"] == "del_se_img") {
    $result = $process->check_login();
    $result = $process->del_se_img($_POST["image"]);
}
if ($_POST["act"] == "del_ig_img") {
    $result = $process->check_login();
    $result = $process->del_ig_img($_POST["image"]);
}
if ($_POST["act"] == "del_bt_img") {
    $result = $process->check_login();
    $result = $process->del_bt_img($_POST["image"]);
}
if ($_POST["act"] == "del_acc_img") {
    $result = $process->check_login();
    $result = $process->del_acc_img($_POST["image"]);
}
if ($_POST["act"] == "del_crt_img") {
    $result = $process->check_login();
    $result = $process->del_crt_img($_POST["image"]);
}
if ($_POST["act"] == "del_ac_data") {
    $result = $process->check_login();
    $result = $process->del_ac_data($_POST["data"]);
}
if ($_POST["act"] == "update_user") {
    $result = $process->check_login();
    echo $result = $process->update_user($_POST["id"]);
}
if ($_POST["act"] == "check_user") {

    echo $result = $process->get_user_count();
}
if ($_POST["act"] == "upswd") {
    $result = $process->check_login();
    echo $result = $process->get_user_st($_POST["userp"], $_POST["user"]);
}

if ($_POST["act"] == "make_top_slider") {

    $result = $process->make_top_HomeSlider($_POST);

}
if ($_POST["act"] == "del_slider") {

    $result = $process->delete_HomeSlider($_POST["id"]);

}

if ($_POST["act"] == "make_top_popup") {

    $result = $process->make_top_home_popup($_POST);

}

if ($_POST["act"] == "remove_top_popup") {

    $result = $process->remove_top_home_popup($_POST);

}
if ($_POST["act"] == "del_popup") {

    $result = $process->delete_home_popup($_POST["id"]);

}
if ($_POST["act"] == "check_popup") {

    echo $result = $process->get_home_popup_count();

}

if ($_POST["act"] == "make_top_rs") {

    $result = $process->make_top_home_rs($_POST);

}

if ($_POST["act"] == "remove_top_rs") {

    $result = $process->remove_top_home_rs($_POST);

}
if ($_POST["act"] == "del_rs") {

    $result = $process->delete_home_rs($_POST["id"]);

}
if ($_POST["act"] == "check_rs") {

    echo $result = $process->get_home_rs_count();

}



?>
