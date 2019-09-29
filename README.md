# JunkGeneratorPHP
C/C++ Junk Code Generator

## Generated code:
**1. Will never execute - Uses 0% Of CPU
<br/>2. Don't require to disable linker optimization (Can be used in real functions without affecting performance)
<br/>3. Gives 1:1 Size results (Strings are not compressed by compilers, so 1MB JunkCode = 1MB Compiled)**

## Available junk styles:
**1. Passive if statement
<br/>2. Unreachable case in switch(int)**

You can find Example Generated code in Example Folder,
<br/>And source code in Main Folder
<br/>Feel Free to Pull updates and ideas to expand my project

I kept comments and syntax in simple manner, so maybe this project will help someone understand basics of PHP

**Known limitations/problems:**
1. (Bypassed - Split junk into multiple files) ~~Code compiled using built-in visual studio compiler crashes when you paste more than 1500*1024 bytes into SINGLE file~~
2. (Fixed - Use new Switch/Case Junk Style; But also why woud you use compiler optimization in files containing junk code?) ~~Compiler kicks out passive if case in high optimization settings~~
