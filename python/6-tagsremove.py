#!/usr/bin/python
#6 usuwa html tags
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		line = re.compile('<.*?>')
		line1 = re.sub(line, '', str)
		f1.write(line1)
	f1.close()
	f.close()
