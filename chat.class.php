<?php


class Chat extends DataBase
{

  public function getChatBySearch($search)
  {
    $stmt = $this->connect()->prepare("SELECT * FROM chat WHERE type LIKE ? LIMIT 5");
    $stmt->execute(array("%$search%"));
    $result = $stmt->fetchall();

    return $result;
  }

  public function getChatById($id)
  {
    $stmt = $this->connect()->prepare("SELECT * FROM chat WHERE type = ?");
    $stmt->execute(array($id));
    $result = $stmt->fetch();

    return $result;
  }
}

$chat = new Chat();