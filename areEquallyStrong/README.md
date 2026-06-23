<h2>Are Equally Strong</h2>
<div class="markdown"><p>Two arms are <em>equally strong</em> when the maximum weight each can lift is the same.</p>
<p>Two people are <em>equally strong</em> when their stronger arms match and their weaker arms also match (either arm may be the stronger one).</p>
<p>Given the lifting limits for your left and right arms and your friend's left and right arms, determine whether you and your friend are equally strong.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>yourLeft = 1</code>, <code>yourRight = 1</code>, <code>friendsLeft = 1</code>, and <code>friendsRight = 1</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = true</code>;</li>
<li>For <code>yourLeft = 5</code>, <code>yourRight = 7</code>, <code>friendsLeft = 7</code>, and <code>friendsRight = 5</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = true</code>;</li>
<li>For <code>yourLeft = 15</code>, <code>yourRight = 10</code>, <code>friendsLeft = 15</code>, and <code>friendsRight = 9</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = false</code>;</li>
<li>For <code>yourLeft = 8</code>, <code>yourRight = 9</code>, <code>friendsLeft = 7</code>, and <code>friendsRight = 10</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = false</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer yourLeft</strong></p>
<p>A non-negative integer representing the heaviest weight you can lift with your left arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ yourLeft ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer yourRight</strong></p>
<p>A non-negative integer representing the heaviest weight you can lift with your right arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ yourRight ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer friendsLeft</strong></p>
<p>A non-negative integer representing the heaviest weight your friend can lift with his or her left arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ friendsLeft ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer friendsRight</strong></p>
<p>A non-negative integer representing the heaviest weight your friend can lift with his or her right arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ friendsRight ≤ 20</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if you and your friend are equally strong, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AreEquallyStrongTest.php</code></p>
