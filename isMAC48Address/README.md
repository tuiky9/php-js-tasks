<h2>Is MAC 48 Address</h2>
<div class="markdown"><p>A MAC (media access control) address uniquely identifies a network interface on a physical network segment.</p>
<p>Under the IEEE 802 standard, a MAC-48 address is written as six pairs of hexadecimal digits (<code>0</code>–<code>9</code> or <code>A</code>–<code>F</code>), with hyphens between each pair — for example, <code>01-23-45-67-89-AB</code>.</p>
<p>Given a string <code>inputString</code>, determine whether it follows the MAC-48 formatting rules.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "FF-FF-FF-FF-FF-FF"</code>, the output should be<br>
<code>isMAC48Address(inputString) = true</code>;</li>
<li>For <code>inputString = "00-00-00-00-00-0"</code>, the output should be<br>
<code>isMAC48Address(inputString) = false</code>;</li>
<li>For <code>inputString = "Z1-1B-63-84-45-E6"</code>, the output should be<br>
<code>isMAC48Address(inputString) = false</code>;</li>
<li>For <code>inputString = "00-1B-63-84-45-E6"</code>, the output should be<br>
<code>isMAC48Address(inputString) = true</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>15 ≤ inputString.length ≤ 20</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if <code>inputString</code> is a valid MAC-48 address, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsMAC48AddressTest.php</code></p>
