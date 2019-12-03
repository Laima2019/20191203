<?php


namespace form;

use db\Database;

class Forms
{
    public function insertLogInUserForm()
    {
        print "
               <form action=\"#\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">Username</label>
                        <input class=\"form-control\" type=\"text\" name=\"user_name\" id=\"username\" placeholder=\"james.bond\"
                               required/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input class=\"form-control\" type=\"text\" name=\"user_email\" id=\"email\" placeholder=\"james.bond@spectre.com\"
                               required/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label>
                        <input class=\"form-control\" type=\"password\" name=\"user_password\" id=\"password\" placeholder=\"********\"
                               required/>
                    </div>
        <!--            <div class=\"form-group\">-->
        <!--                <label for=\"passwordRepeat\">Repeat Password</label>-->
        <!--                <input class=\"form-control\" type=\"password\" name=\"passwordRepeat\" id=\"passwordRepeat\"-->
        <!--                       placeholder=\"********\" required/>-->
        <!--            </div>-->
                    <div class=\"m-t-lg\">
                        <ul class=\"list-inline\">
                            <li>
                                <input class=\"btn btn--form\" type=\"submit\" value=\"Register\" name=\"register\"/>
                            </li>
                            <li>
                                <a class=\"signup__link\" href=\"#\">I am already a member</a>
                            </li>
                        </ul>
                    </div>
                </form>  
                <form method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input class=\"form-control\" type=\"text\" name=\"user_email\" id=\"email\" placeholder=\"james.bond@spectre.com\"
                               required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label>
                        <input class=\"form-control\" type=\"password\" name=\"user_password\" id=\"password\" placeholder=\"********\"
                               required>
                    </div>
                    <div class=\"m-t-lg\">
                        <ul class=\"list-inline\">
                            <li>
                                <input class=\"btn btn--form\" type=\"submit\" value=\"LogIn\" name=\"login\"/>
                            </li>
                        </ul>
                    </div>
                </form>      
       ";
    }
    // sukuriame lentele, kurioje leis pataisyti forma iskviesta is duombazes master->posts

    public function editForm(){
        print "
        <form method='post'>
        <input type='text' placeholder='Title' name='title' value='title'>
        <textarea id='' cols='30' rows='10' placeholder='text' name='text'>text</textarea>
        <input type='submit' placeholder='Sent new data'>
        </form>
        ";
    }
}
