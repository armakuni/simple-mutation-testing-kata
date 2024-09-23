package com.armakuni.maths;

import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;
class ComparisonTest {

    @Test
    void that1IsEqualTo1() {
        Comparison c = new Comparison();
        assertTrue(c.isEqual(1, 1));
    }

    @Test
    void that2IsNotEqualTo1() {
        Comparison c = new Comparison();
        assertFalse(c.isEqual(2, 1));
    }

    @Test
    void that1IsLessThan2() {
        Comparison c = new Comparison();
        assertTrue(c.lessThan(1, 2));
    }

    @Test
    void that2IsNotLessThan1() {
        Comparison c = new Comparison();
        assertFalse(c.lessThan(2, 1));
    }

    @Test
    void that2IsGreaterThan1() {
        Comparison c = new Comparison();
        assertTrue(c.greaterThan(2, 1));
    }

    @Test
    void that1IsNotGreaterThan2() {
        Comparison c = new Comparison();
        assertFalse(c.greaterThan(1, 2));
    }
}