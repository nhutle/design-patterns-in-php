#!/bin/bash

read -r -p 'Commit message: ' desc  # prompt user for commit message

git add .

git add -u

git commit -m "$desc"

git push origin master