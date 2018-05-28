<div class="topic">
Forums<br>
General Discussion
</div>
<div class="table-responsive forum-discussion">
<table>
    <thead>
    <tr>
        <th>Topic</th>
        <th>Replies</th>
        <th>Author</th>
        <th>Last post</th>
    </tr>
   
   </thead>
    <tbody> 
        <?php foreach($this->list as $key => $value): ?>
            <tr>
                <td>
                    <a href="<?php echo URL.'forum/view/'.$value['title'];?>" class="title"> <?php echo $value['title']?></a><br>
                    <span class="text"><?php echo $value['text'];?></span>
                   
                </td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        <?php endforeach;?>    
    </tbody>

</table>
</div>




