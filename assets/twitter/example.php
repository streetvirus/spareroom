<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" />
<title>Example</title>


<!-- Include the weather stylesheet to make it look "pretty" -->
<link rel="stylesheet" href="twitter.css" />

<style>
body {
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
</style>

</head>

<body>

<!-- Remember to include the twitter plugin file -->
<!-- Don't forget to add your API Key & Username to bitly_plugin.php or it won't work! -->
<?php include('twitter_plugin.php'); ?>


<h1>Twitter Plugin</h1>
<p>This plugin allows you to display a twitter timeline from a specific users timeline, or search keywords, mentions, etc and display the results. It also includes a cool caching option that will allow you to cache the reults for a certain amount of time. The display can be easily customized with CSS. The download comes with a stylsheet that will style your feed exactly like the examples below. If you'd like to use it, simply add <em>twitter.css</em> from the download to your site. It will still work if you dont include a stylesheet, it just wont look as nice.</p>

<h3>Initialize</h3>
<p>Before we can work with our plugin, we need to get the file into the page. Here's how...</p>
<h5>Standard PHP</h5>
<pre class="code">
include('twitter_plugin.php');
</pre>


<h5>CodeIgniter</h5>
<pre class="code">
$this->helper('twitter_helper');
$twitter = $this->twitter;
</pre>


<h5>Caching</h5>
<p>Caching is turned off by default as it requires a file to write to. BUt it's strongly recomended that you enable it. Not only does it speed up load times to not update the feed on every page load, but twitter limits you to 150 requests per hour, which is easy to exceed without caching. Basically, once the data is received from twitter it will saved to a file on your server, and that file will be used for x amount of time before polling twitter for new info. To setup caching, simply open <em>twitter_plugin.php</em> (or <em>twitter_helper.php</em> in CodeIgniter) find the section that says "Set your cache settings here..." at the very top and set the values like so...</p>

<pre class="code">
<span class="code_comment">// Set your cache settings here...</span>
$this->cache = true; <span class="code_comment"> // true enables the cache, false disables it</span>
$this->cache_time = '30 min'; <span class="code_comment">// How long the file should be cached before updating.</span>
$this->feed_cache = 'path/to/twitter_feed.php'; <span class="code_comment">// cache file for twitter->timeline()</span>
$this->search_cache = 'path/to/twitter_search.php'; <span class="code_comment">// cache file for twitter->search()</span>
</pre>

<p>
You can set <em>$this->cache_time</em> to anything you like. The default is 30 min which should be fine for most cases, but if you tweet a lot, you may want to lower this to maybe 5 or 10 minutes. But, I'd recommend not setting it any lower than 1 min. Make sure that the files yoo assign to <em>$this->feed_cache</em> and <em>$this->search_cache</em> are writable if you want the cache to work properly.
</p>

<br />


<hr />

<h3>Standard Display</h3>
<p>This example will display the 5 most recent tweets from <a href="http://twitter.com/StephenAtHome">@StephenAtHome</a> (Stephen Colbert).</p>

<?php echo $twitter->timeline('StephenAtHome'); ?>

<hr />

<h3>Display With Thumbnails</h3>
<p>This example will display onlye the 3 most recent items from the <a href="http://twitter.com/mootools">@mootools</a> timeline. This time we'll use the thumbnail setting to display a thumbnail of the users profile image next to each tweet. Also, since the previous request for the <a href="http://twitter.com/StephenAtHome">@StephenAtHome</a> tweets is being saved to the default cache location, we'll need to specify a new one for this request so it doesn't override the previous cache. Anytime you have more than one feed, make sure for specify unique cache files for each one if you want caching to work properly. Don't worry, if the file doesn't exist it will be created (so long as the directory is writeable).</p>

<?php echo $twitter->timeline('mootools', 3, 'thumbnail', '_cache/twitter_feed2.php'); ?>


<hr />
<h3>Keyword Search</h3>
<p>This example will search twitter for specific word(s) and display the most recent tweets containing it. Why don't we see if anyone has gotten a new puppy recently...</p>

<?php echo $twitter->search('new puppy', 5, 'thumbnail'); ?>



<h3>Hash Tag Search</h3>
<p>Okay now let's try searching for hastags. Note that search uses a different cahce file than timeline (which is why there was need need to specify a cache file in the previous example). But, since this is our second search, we'll need to set a new cache file for it. Okay then, let's see what's #awesome today...</p>

<?php echo $twitter->search('#awesome', 5, 'thumbnail', '_cache/twitter_search2.php'); ?>


<h3>Search @Mentions</h3>
<p>This time let's create a timeline mentions for @google. Just for fun, lets mix it up this time and only get tweets in spanish...</p>

<?php echo $twitter->search('@google', 5, 'thumbnail', '_cache/twitter_search3.php', 'es'); ?>



</body>
</html>