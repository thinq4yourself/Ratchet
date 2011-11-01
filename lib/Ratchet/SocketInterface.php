<?php
namespace Ratchet;

/**
 * An object-oriented container for a single socket connection
 */
interface SocketInterface {
    /**
     * Send text to the client on the other end of the socket
     * @param string
     * @param int
     */
    function write($buffer, $length = 0);

    /**
     * Called when the client sends data to the server through the socket
     * @param string
     * @param int
     * @param int
     */
    function recv(&$buf, $len, $flags);

    /**
     * Close the open connection to the client/socket
     */
    function close();
}