package maths_test

import (
	"mutation-test-kata/maths"
	"testing"
)

import "github.com/stretchr/testify/assert"

func Test0Equals0(t *testing.T) {
	assert.True(t, maths.Equal(0, 0))
}

func Test0NotEquals1(t *testing.T) {
	assert.False(t, maths.Equal(0, 1))
}

func Test1LessThan2(t *testing.T) {
	assert.True(t, maths.LessThan(1, 2))
}

func Test2NotLessThan1(t *testing.T) {
	assert.False(t, maths.LessThan(2, 1))
}

func Test2GreaterThan1(t *testing.T) {
	assert.True(t, maths.GreaterThan(2, 1))
}

func Test1NotGreaterThan2(t *testing.T) {
	assert.False(t, maths.GreaterThan(1, 2))
}
