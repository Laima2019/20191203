<?php

namespace datatable;

class Tables
{
    public function table($array)
    {
        print '<table>'.'<thead>';
        foreach ($array as $objarray) {
            print '<tr>';
            foreach ($objarray as $key => $value) {
                print '<th>' . $key . '</th>';
            }
            print '</tr>';
            break;
        }
        print '</thead>';
        foreach ($array as $objarray) {
            print '<tr>';
            foreach ($objarray as $value) {
                print '<td>' . $value . '</td>';
            }
            print '</tr>';
        }
        print '</table>';
    }

    // edit lenteles forma su pazymetu
    public function userPostsTable($postArrayById){
        print '<form action="" method="get"><table>';
        foreach ($postArrayById as $post){
            print "
        <tr>
        <td><input name='postId' type='checkbox' value='$post->id_posts'></td>
        <td>$post->title</td>
        <td>$post->text</td>
        <td>$post->date</td>
        </tr>
        ";
    }
        print '<input type="submit" value="edit"></table></form>';
    }
}
