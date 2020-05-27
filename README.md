# SVATTT2016-cURL
**Category:** web

**Author:** l4w

**Difficulty:** easy

## Description
```
http://x.x.x.x/
Someday, SSRF would turn to RCE.
```

## Points
100

## Solution
<details>
 <summary>Reveal Spoiler</summary>

Payload:

`http://apache/fla[g-h].php`

 ## Flag
`fl4g{t3st_flag}`


</details>

## Run locally
### Build
```
docker-compose build
```

### Run
```
docker-compose run -d
```
---
**Disclaimer**: I am not the creator of this challenge. This was adapted directly from: https://github.com/l4wio/CTF-challenges-by-me/tree/master/svattt-2016/quals/challenges/web/cURL