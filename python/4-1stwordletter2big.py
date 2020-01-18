#!/usr/bin/python
#4 zmienia 1 litere kazdego slowa na wielka. 
with open('output.txt', 'w') as f1:
	with open('input.txt', 'r') as f:
		for line in f:
			l=line.title()
			f1.write(l)
		f1.close()
		f.close()
