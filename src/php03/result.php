<?php

require_once('config/status_codes.php');

// POSTデータの存在確認とバリデーション
if (!isset($_POST['option']) || !isset($_POST['answer_code'])) {
    header('Location: index.php');
    exit;
}

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if (empty($option) || empty($answer_code)) {
    header('Location: index.php');
    exit;
}

foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
        }
    if ($status_code['code'] === $option) {
        $selected_description = $status_code['description'];
    }
}

$result = $option === $code;
?>

<div class='result'>
    <?php if ($result): ?>
    <h2 class='result__text--correct'>正解</h2>
    <?php else: ?>
    <h2 class='result__text--incorrect'>不正解</h2>
    <?php endif; ?>
</div>

<?php if (!$result): ?>
<tr class="answer-table__row">
    <th class="answer-table__header">あなたの回答</th>
    <td class="answer-table__text"><?php echo $option; ?></td>
</tr>
<tr class="answer-table__row">
    <th class="answer-table__header">あなたの回答の説明</th>
    <td class="answer-table__text"><?php echo $selected_description; ?></td>
</tr>
<br />
<tr class="answer-table__row">
    <th class="answer-table__header">正解</th>
    <td class="answer-table__text"><?php echo $code; ?></td>
</tr>
<tr class="answer-table__row">
    <th class="answer-table__header">正解の説明</th>
    <td class="answer-table__text"><?php echo $description; ?></td>
</tr>
<?php else: ?>
<tr class="answer-table__row">
    <th class="answer-table__header">ステータスコード</th>
    <td class="answer-table__text"><?php echo $option; ?></td>
</tr>
<tr class="answer-table__row">
    <th class="answer-table__header">説明</th>
    <td class="answer-table__text"><?php echo $description; ?></td>
</tr>
<?php endif; ?>
