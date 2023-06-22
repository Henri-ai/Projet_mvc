<?php 

class Comment{

    private int $comments_id;
    private string $comment;
    private string $added_at;
// id-------------------------------------------------------------------------------------------------
    public function getCommentsId(): int
    {
        return $this->comments_id;
    }
    public function setActorsId(int $comments_id)
    {
        $this->comments_id=$comments_id;
    }
// comment----------------------------------------------------------------------------------------------

    public function getComment(): string
    {
        return $this->comment;
    }
    public function setComment(string $comment)
    {
        $this->comment=$comment;
    }
// added_at---------------------------------------------------------------------------------------------
    public function getAddedAt(): string
    {
        return $this->added_at;
    }

    public function setAddedAt(string $added_at)
    {
        $this->added_at=$added_at;
    }
}

