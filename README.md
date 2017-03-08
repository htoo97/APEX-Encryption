# Project 5 - Encryption

Time spent: **4** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README
    * mMWs11or6d58iCSzCS4BzwCkl/hpjGQTxJE/6sHUjpn6aAcJ/aqiOSXQqbrjHIMFlebeRysBNgKNNzx+7kLjPvuuo9RsCzzK6zEO9/XMj1xyJWdoJgrfPSE5+k3PEMuqbTO0WazNn4J9o5RDAFmHxvnZ5V4hHHpInJklnfpLfhc=

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
    * To: sydneybristow
From: agent99
Subject: Encrypted and Signed Message
Body:

68bP7ROc0+A+30CoeFUKTXdKpL3vw7BBQ+nHeZ8GCjzxJzDz//tXDDPF+Icj7EjGk/EKRiuGHRZtIqLAvfgcRftPZIHhl6vX56knjQasdZm0ufA37w96NnWDI5QaakngI79UWtOqcDvYFWbTxpeacoF2vIu4PamsY9nA2yS0r9qVPAlVyScmxdBGzJgDd8yQ4JXC6xRWowOMqJd1v3gt5yMdZgjxLe1XKgON1x15LHpwkPHKatXA1iWcACWJp1rvK5dBMrabnvLyk46K1/T++kOuH2PPnZLBbAl/dMZWl32GU4TnCqQd2yDUCqCxOTnwFYGIq50WNnapsWW8TTECRA==

Signature:
K8+Zj3ij31mGj5K7c4kRpJW1pvXC9pnlohGMVQCBgWcA75NehyMaVQTt3D6sZxNzDoq3h1L+sHTY1yajSLJOu7Yn570ZoQLN1RmCG7ZzRoOUI6H7k+qgXCmomF5CiVwXHw0FB8gXWT8pBxLVTjJ9sI4GoFjhko4zwlBZGpoFK24EMYxARIIahLk9SbnmfSqGiRrB9SPvNjJQMBA2R3XLGTfAFRg7/s7/hpQyATH81PYYLoa+5gc8C9HUi/x78KJGxF1zjsu4EpjJIY/arnXRTmg3Fn9KwduMSuioRzrEJSvZsRc6RB1tcWQn6uQ9klmsNOv3wswn9fQ8VnH/0MfIOg==

Public Key:
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7CnJ5KzmzNpGmclN1l0K
K4A8UJcwbMHfv0dTCwvTWiNWyE95UtiBUTuqktTjiT191+6hCCianuMP7CB+h5Fe
8Mk/d91SxiitGIdbE+W5E2lDSyZK11elsinCpgY0IQ/7jWGM/OmHa7UcgJSFjIS+
5jNa/e3wFw361iQKCKTZT0SYgXY5eJDjyqLJ5xpnyZ6RmrvHwtS1rm746kF//69Y
RdzuUc5LsBDBXVZhCkH7DNzt3Y9PRpLsJlGF4kj544+0hfXA0oqlllSEWIiugZVM
rkXSEa5KzeMeZSSC/vWRBER/V1p41Tx8Wwjwhcy/v18PhlNuTnyg5j3sgr1ndyyA
hwIDAQAB
-----END PUBLIC KEY-----

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: Natasha
    * "email_05.txt" citing Austin as sender is not valid in terms of signature, whereas "email_06.txt" citing Natasha as sender is. The friend's public key is also the same as Natasha's public key.

The following objectives are **optional**:

* Bonus Objective 1\.
  * [ ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/T8HaSUfh.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Thant Htoo Zaw]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
