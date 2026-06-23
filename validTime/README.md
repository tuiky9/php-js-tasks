<h2>Valid Time</h2>
<div class="markdown"><p>Determine whether a string represents a valid time on a 24-hour clock.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>time = "00:00"</code>, the output should be<br>
<code>validTime(time) = true</code>;</li>
<li>For <code>time = "23:59"</code>, the output should be<br>
<code>validTime(time) = true</code>;</li>
<li>For <code>time = "25:51"</code>, the output should be<br>
<code>validTime(time) = false</code>;</li>
<li>For <code>time = "02:76"</code>, the output should be<br>
<code>validTime(time) = false</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string time</strong></p>
<p>A time string in <code>HH:MM</code> format. The first two and last two characters are always digits.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> when the time is valid, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ValidTimeTest.php</code></p>
