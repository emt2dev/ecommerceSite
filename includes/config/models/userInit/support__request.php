<?php
class support__request {
  public function __construct($user_id, $reason, $comments) {
    $this->user_id = $user_id;
    $this->reason = $reason;
    $this->comments = sanitize($comments);
    $this->time = date('Y-d-m');
  }

  public function save($connection) {
    $query = "INSERT INTO support_request (user_id, reason, comments, submitted, active) VALUES (?, ?, ?, ?, ?)";
  
    $query = $connection->prepare($query);
    $query->bind_param("ssssi", $a, $b, $m, $n, $o);

        $a = $this->user_id;
        $b = $this->reason;
        $m = $this->comments;
        $n = $this->time;
        $o = 1;

  $query->execute();

  $_SESSION['sr_sent_message'] = '
    <div class="action__container">
        <form method="post" action="http://localhost/ecommerceSite/includes/config/controllers/user.php" class="action__form">
            <button type="submit" class="action___button" name="action__formButton">Request sent</button>
        </form>
    </div>
  ';
  }
}
?>