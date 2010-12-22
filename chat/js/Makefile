COMPRESSOR=$HOME/bin/yuicompressor-2.4.1/build/yuicompressor-2.4.1.jar
ARGS=
MINSUFFIX=.min
SRCS=lang/bg.js chat.js config.js custom.js FABridge.js
MINS=${SRCS:.js=${MINSUFFIX}.js}

all: minify

minify: ${MINS}
	cat lang/bg.min.js chat.min.js config.min.js custom.min.js FABridge.min.js > all.min.js

%${MINSUFFIX}.js: %.js
	java -jar ${COMPRESSOR} ${ARGS} $< -o ${<:.js=$(MINSUFFIX).js}
