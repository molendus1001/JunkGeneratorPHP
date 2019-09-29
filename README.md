# JunkGeneratorPHP
Server Sided C/C++ Junk Code Generator
Written in PHP with some additions for easier use
All you need to get it running is just clone main/index.php onto your PHP instance
Only single file is required to get this running - so it's very "plug-and-play"
I kept comments and syntax in simple manner, so maybe this project will help someone understand basics of PHP
Feel Free to Pull updates and ideas to expand my project

## Generated code (Example generated junkcode in example folder):
**1. Will never execute - Uses 0% Of CPU
<br/>2. Don't require to disable linker optimization (Can be used in real functions without affecting performance)
<br/>3. Gives 1:1 Size results (Strings are not compressed by compilers, so 1MB JunkCode = 1MB Compiled)**

## Available junk styles:
**1. Passive if statement
<br/>2. Unreachable case in switch(int)**

**Known limitations/problems:**
1. (Bypassed - Split junk into multiple files) ~~Code compiled using built-in visual studio compiler crashes when you paste more than 1500*1024 bytes into SINGLE file~~
2. (Fixed - Use new Switch/Case Junk Style; But also why woud you use compiler optimization in files containing junk code?) ~~Compiler kicks out passive if case in high optimization settings~~
