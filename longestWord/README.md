<h2>Longest World</h2>
<div class="markdown"><p>A <em>word</em> is a maximal run of consecutive English letters. From the given string, return the longest <em>word</em>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>text = "To be or not to be"</code>, the output should be<br>
<code>longestWord(text) = "not"</code>.</li>
<li>For <code>text = "abc1234567890"</code>, the output should be<br>
<code>longestWord(text) = "abc"</code>.</li>
<li>For <code>text = "A!!! aa"</code>, the output should be<br>
<code>longestWord(text) = "aa"</code>.</li>
<li>For <code>text = "Ready[[[, steady, go!"</code>, the output should be<br>
<code>longestWord(text) = "steady"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string text</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ text.length ≤ 50</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>The longest <em>word</em> in <code>text</code>. The answer is guaranteed to be unique.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LongestWordTest.php</code></p>
