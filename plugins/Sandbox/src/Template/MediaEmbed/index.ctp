<?php
/**
 * @var \App\View\AppView $this
 * @var \MediaEmbed\Object\MediaObject $mediaObject
 */
?>

<h2>MediaEmbed</h2>
<p>
<a href="https://github.com/dereuromark/MediaEmbed" target="_blank">[MediaEmbed]</a> is a PHP library to deal with media services, parsing their URLs and displaying audio/video as embed HTML code.
</p>

<h3>Parsing Video URL</h3>
<p>
	Try a public Youtube or Dailymotion URL etc.
</p>

<?php
echo $this->Form->create();
echo $this->Form->control('url', ['default' => $this->request->getQuery('url')]);
echo $this->Form->submit();
echo $this->Form->end();
?>


<?php
if (!empty($mediaObject)) {
?>
<h3>Result</h3>
	<p>
		Type: <b><?php echo h($mediaObject->stub('name')); ?></b> | ID: <b><?php echo h($mediaObject->id()); ?></b>
	</p>

	<p>
	<code><?php echo h('echo $mediaObject->getEmbedCode()'); ?></code>:
</p>
<?php
	echo $mediaObject->getEmbedCode();
?>

	<h4>Details</h4>
	<?php
		$stub = $mediaObject->stub();
	?>
	<pre><?php echo h(print_r($stub, true)); ?></pre>
<?php
}
?>