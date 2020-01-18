#!/usr/bin/python
import re
with open('output.txt', 'w') as f1:
	with open('input.txt', 'r') as f:
		for line in f:
			line1 = re.sub(" +", " ",line)
			line2 = line1.strip()
			line3 = line2.replace(" .", ".")
			f1.write(line3)
		f1.close()
		f.close()
