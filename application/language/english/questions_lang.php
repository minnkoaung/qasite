<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Language File
 */

// Titles
$lang['questions title question_add']                 = "Add Question";
$lang['questions title question_delete']              = "Confirm Delete Question";
$lang['questions title question_edit']                = "Edit Question";
$lang['questions title questions_list']                = "Question List";

// Buttons
$lang['questions button add_new_question']            = "Add New Question";

// Tooltips
$lang['questions tooltip add_new_question']           = "Create a new question.";



// Table Columns
$lang['questions col question_id']                 = "ID";
$lang['questions col question']                   = "Question";
$lang['questions col answer1']                  = "Answer1";
$lang['questions col answer2']                  = "Answer2";
$lang['questions col answer3']                  = "Answer3";
$lang['questions col answer4']                  = "Answer4";


// Form Inputs
$lang['questions input email']                    = "Email";
$lang['questions input first_name']               = "First Name";
$lang['questions input is_admin']                 = "Is Admin";
$lang['questions input language']                 = "Language";
$lang['questions input last_name']                = "Last Name";
$lang['questions input password']                 = "Password";
$lang['questions input password_repeat']          = "Repeat Password";
$lang['questions input status']                   = "Status";
$lang['questions input username']                 = "Username";
$lang['questions input username_email']           = "Username or Email";

// Help
$lang['questions help passwords']                 = "Only enter passwords if you want to change it.";

// Messages
$lang['questions msg add_user_success']           = "%s was successfully added!";
$lang['questions msg delete_confirm']             = "Are you sure you want to delete <strong>%s</strong>? This can not be undone.";
$lang['questions msg delete_user']                = "You have succesfully deleted <strong>%s</strong>!";
$lang['questions msg edit_profile_success']       = "Your profile was successfully modified!";
$lang['questions msg edit_user_success']          = "%s was successfully modified!";
$lang['questions msg register_success']           = "Thanks for registering, %s! Check your email for a confirmation message. Once
                                                 your account has been verified, you will be able to log in with the credentials
                                                 you provided.";
$lang['questions msg password_reset_success']     = "Your password has been reset, %s! Please check your email for your new temporary password.";
$lang['questions msg validate_success']           = "Your account has been verified. You may now log in to your account.";
$lang['questions msg email_new_account']          = "<p>Thank you for creating an account at %s. Click the link below to validate your
                                                 email address and activate your account.<br /><br /><a href=\"%s\">%s</a></p>";
$lang['questions msg email_new_account_title']    = "New Account for %s";
$lang['questions msg email_password_reset']       = "<p>Your password at %s has been reset. Click the link below to log in with your
                                                 new password:<br /><br /><strong>%s</strong><br /><br /><a href=\"%s\">%s</a>
                                                 Once logged in, be sure to change your password to something you can
                                                 remember.</p>";
$lang['questions msg email_password_reset_title'] = "Password Reset for %s";

// Errors
$lang['questions error add_user_failed']          = "%s could not be added!";
$lang['questions error delete_user']              = "<strong>%s</strong> could not be deleted!";
$lang['questions error edit_profile_failed']      = "Your profile could not be modified!";
$lang['questions error edit_user_failed']         = "%s could not be modified!";
$lang['questions error email_exists']             = "The email <strong>%s</strong> already exists!";
$lang['questions error email_not_exists']         = "That email does not exists!";
$lang['questions error invalid_login']            = "Invalid username or password";
$lang['questions error password_reset_failed']    = "There was a problem resetting your password. Please try again.";
$lang['questions error register_failed']          = "Your account could not be created at this time. Please try again.";
$lang['questions error user_id_required']         = "A numeric user ID is required!";
$lang['questions error user_not_exist']           = "That user does not exist!";
$lang['questions error username_exists']          = "The username <strong>%s</strong> already exists!";
$lang['questions error validate_failed']          = "There was a problem validating your account. Please try again.";
$lang['questions error too_many_login_attempts']  = "You've made too many attempts to log in too quickly. Please wait %s seconds and try again.";
