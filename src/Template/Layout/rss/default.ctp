<?php
/**
 * @var \App\View\AppView $this
 */
if (!isset($channel)) :
    $channel = [];
endif;
if (!isset($channel['title'])) :
    $channel['title'] = _view.fetch('title');
endif;

echo $this->Rss->document(
    $this->Rss->channel([], $channel, _view.fetch('content'))
);
