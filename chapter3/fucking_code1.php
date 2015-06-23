<?php
    // コントローラからセットされる
    $isHogeCampaignTarget = true;

    // 以下、Viewのつもり
?>

<?php if ($isHogeCampaignTarget != null): ?>
    <b>ほげキャンペーン!!開催中</b>
    <?php if ($isHogeCampaignTarget === true): ?>
        <b>ほげキャンペーンの対象者です</b>
    <?php elseif ($isHogeCampaignTarget === false): ?>
        <b>ほげキャンペーンの対象は終了しました</b>
    <?php endif; ?>
<?php endif; ?>

