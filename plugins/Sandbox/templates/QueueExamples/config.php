<?php
/**
 * @var \App\View\AppView $this
 * @var \Queue\Model\Entity\QueuedJob[] $queuedJobs
 * @var \Queue\Model\Entity\QueuedJob $queuedJob
 * @var string[] $tasks
 * @var int $length
 * @var array $status
 */
?>

<nav class="actions col-sm-4 col-xs-12">
	<?php echo $this->element('navigation/queue'); ?>
</nav>
<div class="page index col-sm-8 col-xs-12">

	<h3>Config</h3>
	<p>Just displaying some background infos about the current running queue.</p>
	<ul>
		<li>Current jobs waiting or still running in queue: <?php echo h($length); ?></li>
		<li>Current running workers: <?php echo $status ? $status['workers'] : '-'; ?></li>
		<li>Last run: <?php echo $status ? ($this->Time->nice($status['time'])) : '-'; ?></li>
	</ul>

	<p>Note that multiple visitors trying out the queue would have to share the workers and their processing power.
	This can mean with low number of workers that in peak usage time frames some jobs will take longer to start running.</p>

	<p>In the background the following cronjob is configured via crontab:</p>
	<pre>*/1 * * * * cd /var/www/sandbox && bin/cake queue runworker -q</pre>
	<p>This starts a new worker of max 2 minutes every minute, creating a total availability of 2 workers in average.</p>

</div>
