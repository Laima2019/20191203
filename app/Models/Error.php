<?php


namespace errormessage;


class Error
{
    public function error($msgTitle, $msg)
    {
        print "
            <section>
                <h1>$msgTitle</h1>
                <h3>$msg</h3>       
            </section>
        ";
    }
}