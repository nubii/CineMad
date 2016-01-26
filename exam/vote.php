<?php

// Unique_Content_ID = the id of the dish
        
        
        ##### User liked the content #########
        // if the user press Like
        if ($like === true)
        {
            
            //check if user has already voted, determined by unique content cookie
            if (isset($_COOKIE["voted_".$unique_content_id]))
            {
                echo("Already Voted"); //cookie found, user has already voted
            }
            
            //get vote_up value from db using unique_content_id
            $result = mysqli_query($sql_con,"SELECT vote_up FROM voting_count WHERE unique_content_id='$unique_content_id' LIMIT 1");
            $get_total_rows = mysqli_fetch_assoc($result);
            
            if($get_total_rows)
            {
                //found record, update vote_up the value
                mysqli_query($sql_con,"UPDATE voting_count SET vote_up=vote_up+1 WHERE unique_content_id='$unique_content_id'");
            }else{
                //no record found, insert new record in db
                mysqli_query($sql_con,"INSERT INTO voting_count (unique_content_id, vote_up) value('$unique_content_id',1)");
            }
            
            setcookie("voted_".$unique_content_id, 1, time()+7200); // set cookie that expires in 2 hour "time()+7200".
            echo ($get_total_rows["vote_up"]+1); //display total liked votes
            
        }
        
        ##### User disliked the content #########
        // if the user presses dislake
        
        if ($dislike === true)
        {
            
            //check if user has already voted, determined by unique content cookie
            if (isset($_COOKIE["voted_".$unique_content_id]))
            {
                echo("Already Voted"); //cookie found, user has already voted
            }

            //get vote_up value from db using unique_content_id
            $result = mysqli_query($sql_con,"SELECT vote_down FROM voting_count WHERE unique_content_id='$unique_content_id' LIMIT 1");
            $get_total_rows = mysqli_fetch_assoc($result);
            
            if($get_total_rows)
            {
                //found record, update vote_down the value
                mysqli_query($sql_con,"UPDATE voting_count SET vote_down=vote_down+1 WHERE unique_content_id='$unique_content_id'");
            }else{
                
                //no record found, insert new record in db
                mysqli_query($sql_con,"INSERT INTO voting_count (unique_content_id, vote_down) value('$unique_content_id',1)");
            }
            
            setcookie("voted_".$unique_content_id, 1, time()+7200);  // set cookie that expires in 2 hour "time()+7200". 60 sec * 60 min * 2 hours
            echo ($get_total_rows["vote_down"]+1);//display total disliked votes
        }
    
    ?>