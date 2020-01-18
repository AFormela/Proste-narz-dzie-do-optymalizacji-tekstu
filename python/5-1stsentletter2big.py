#!/usr/bin/python
#5 zmienia 1 litere kazdego zdania na wielka. 
with open('output.txt', 'w') as f1:
	with open('input.txt', 'r') as f:
		for line in f: 
			list = line.split(".")
			#if line.endswith('.'):
			#	list.remove('')
		for w in list:
			stripper= w.strip().capitalize() +"."
			f1.write(stripper)
		f1.close()
		f.close()
