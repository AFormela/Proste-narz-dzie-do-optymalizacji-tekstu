#!/usr/bin/python
#17 dodanie danego slowa (trzeba zmodyfikowac kod za kazdym razem: str = str.replace("neuroscience", "") )
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		str = str.replace("scope", "scope of of")
		f1.write(str)
	f1.close()
	f.close()
