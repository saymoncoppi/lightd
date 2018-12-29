#https://gist.github.com/tdpreece/91c6b0305cc7a151e03f
#!/usr/bin/env bash

# Create a page in the current dir
echo "My Test Page" > test.html

# Start server
python -m SimpleHTTPServer 8000 &> /dev/null &
pid=$!

# Give server time to start up
sleep 1

# request page and print to stdout
# wget -O - http://0.0.0.0:8000/test.html 2> /dev/null
exec ./launcher --menu

# Stop server
kill "${pid}"

# Output on running script:
# My Test Page
