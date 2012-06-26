COMPRESSOR=${HOME}/bin/yuicompressor-2.4.7/build/yuicompressor-2.4.7.jar
ARGS=
MINSUFFIX=.min
SRCS=jquery.idle-timer.js lang/bg.js chat.js config.js custom.js FABridge.js
MINS=${SRCS:.js=${MINSUFFIX}.js}

all: minify

minify: ${MINS}
	cat jquery.idle-timer.min.js lang/bg.min.js chat.min.js config.min.js custom.min.js FABridge.min.js > all.min.js

%${MINSUFFIX}.js: %.js
	java -jar ${COMPRESSOR} ${ARGS} $< -o ${<:.js=$(MINSUFFIX).js}
