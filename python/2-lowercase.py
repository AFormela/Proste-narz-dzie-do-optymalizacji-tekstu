#!/usr/bin/python
with open('output.txt', 'w') as f1:
	with open('input.txt', 'r') as f:
		for line in f:
			line = line.rstrip().lower()
			f1.write(line)
		f1.close()
