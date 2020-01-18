#!/usr/bin/python
#16 usuniecie danego slowa (trzeba zmodyfikowac kod za kazdym razem: str = str.replace("neuroscience", "") )
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		str = str.replace("neuroscience", "")
		f1.write(str)
	f1.close()
	f.close()
