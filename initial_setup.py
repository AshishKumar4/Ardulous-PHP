import pymongo
from passlib.hash import argon2

db = pymongo.MongoClient("mongodb://localhost:27017/")
df = db['ardulous']  # Create Database

d = df['users']     # Create Collections
dd = df["organisations"]
dd = df["posts"]

dm = df['messages']


da = {"_id": "admin", "password": argon2.hash("admin"), "messaging":[], "type": "admin", "email": "admin@ardulous.io", "feed": [], "originals": [], "connections": {'friends': ["ashish"], 'followers': ["ashish"], 'following': ["ashish", "divyanshi", "anushka"]}, "personal": {
    "profile_pic": "./img/Users/ashish/profile_pic.jpg", "profile_cover": "./img/Users/ashish/profile_cover.jpg", "name": "Administrator", "info": "I am the god of this realm! Thou shall bent ye knee!", "dob": "04/01/1999", "city": "Atlantis", "address": "", "occupation": "", "interest": ""}}
dc = {"_id": "ashish", "password": argon2.hash("ashish"), "messaging":[{"uid":"anushka", "msgid":"", "unseen":4}, {"uid":"admin", "msgid":"", "unseen":5}, {"uid":"divyanshi", "msgid":"", "unseen":3}], "type": "normaluser", "email": "ashish@ardulous.io", "feed": [], "originals": [], "connections": {'friends': ["admin", "divyanshi", "anushka"], 'followers': ["admin", "divyanshi", "anushka"], 'following': ["admin", "anushka", "divyanshi"]}, "personal": {"profile_pic": "./img/Users/ashish/profile_pic.jpg",
                                                                                                                                                                                                                                                           "profile_cover": "./img/Users/ashish/profile_cover.jpg", "name": "Ashish Kumar Singh", "info": "I am the Human form of the god of this realm! Thou shall bent ye knee!", "dob": "04/01/1999", "city": "New Delhi", "address": "", "occupation": "", "interest": ""}}

dg = {"_id": "divyanshi", "password": argon2.hash("divyanshi"), "messaging":[], "type": "normaluser", "email": "divyanshi@ardulous.io", "feed": [], "originals": [], "connections": {'friends': ["ashish", "anushka", "shruti"], 'followers': ["ashish", "anushka", "admin", "shruti"], 'following': ["ashish", "anushka", "shruti"]}, "personal": {
    "profile_pic": "./img/Users/divyanshi/profile_pic.jpg", "profile_cover": "./img/Users/divyanshi/profile_cover.jpg", "name": "Divyanshi Kamra", "info": "I am a cute panda :p ", "dob": "04/01/1999", "city": "M Bhool gyi", "address": "", "occupation": "", "interest": ""}}
dh = {"_id": "anushka", "password": argon2.hash("anushka"), "messaging":[], "type": "normaluser", "email": "anushka@ardulous.io", "feed": [], "originals": [], "connections": {'friends': ["ashish", "divyanshi", "shruti"], 'followers': ["admin", "ashish", "divyanshi", "shruti"], 'following': ["ashish", "divyanshi", "shruti"]}, "personal": {"profile_pic": "./img/Users/anushka/profile_pic.jpg",
                                                                                                                                                                                                                                                           "profile_cover": "./img/Users/anushka/profile_cover.jpg", "name": "Anushka Gupta", "info": "I am a mature nerd from luckhnow;_; ", "dob": "04/01/1999", "city": "Lucknow", "address": "", "occupation": "", "interest": ""}}

di = {"_id": "shruti", "password": argon2.hash("shruti"), "messaging":[{"uid":"anushka", "msgid":"", "unseen":4}, {"uid":"ashish", "msgid":"", "unseen":5}, {"uid":"divyanshi", "msgid":"", "unseen":3}], "type": "admin", "email": "shruti@ardulous.io", "feed": [], "originals": [], "connections": {'friends': ["ashish", "divyanshi", "anushka"], 'followers': ["ashish", "divyanshi", "anushka"], 'following': ["ashish", "anushka", "divyanshi"]}, "personal": {"profile_pic": "./img/Users/shruti/profile_pic.jpg",
                                                                                                                                                                                                                                                           "profile_cover": "./img/Users/shruti/profile_cover.jpg", "name": "Shruti Gupta", "info": "I am the Kaam wali bai of this realm! Thou shall switch off the fan!", "dob": "04/01/1999", "city": "", "address": "Dhobhi ghat", "occupation": "logo ko bore krna", "interest": "So na"}}

d.save(da)   # Create four default users
d.save(dc)   # Create four default users
d.save(dg)   # Create four default users
d.save(dh)   # Create four default users
d.save(di)   # Create four default users

tt = {"_id": "test", "text": "test", "author-id": "admin", "time": "00",
      "stats": {"likes": [], "comments": [], "shares": []}}
dd.insert_one(tt)

mm = {"initiator":"admin", "approver":"ashish", "messages":[{"sender":"admin", "text":"Help Me!", "media":""}, {"sender":"ashish", "text":"Help Me too!", "media":""}]}
dm.insert_one(mm)

