<h2>Line Encoding</h2>
<div><p>Encode a string using the following rules:</p>
<ul>
<li>Split the string into the fewest possible non-overlapping runs of the same character
<ul>
<li>e.g. <code>"aabbbc"</code> becomes <code>["aa", "bbb", "c"]</code></li>
</ul>
</li>
<li>Replace every run whose length is greater than one with its length followed by the repeated character
<ul>
<li>e.g. the run <code>"bbb"</code> becomes <code>"3b"</code></li>
</ul>
</li>
<li>Join all resulting pieces in their original order and return the final string.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>s = "abbcabb"</code>, the output should be<br>
<code>lineEncoding(s) = "a2bca2b"</code>.</li>
<li>For <code>s = "abcd"</code>, the output should be<br>
<code>lineEncoding(s) = "abcd"</code>.</li>
<li>For <code>s = "zzzz"</code>, the output should be<br>
<code>lineEncoding(s) = "4z"</code>.</li>
<li>For <code>s = "wwwwwwwawwwwwww"</code>, the output should be<br>
<code>lineEncoding(s) = "7wa7w"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string s</strong></p>
<p>A string of lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ s.length ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>The encoded form of <code>s</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LineEncodingTest.php</code></p>
