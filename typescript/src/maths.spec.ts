import { describe, expect, it } from "vitest";
import { equal, greaterThan, lessThan } from './maths';

describe('Maths', () => {
  it('0 equals 0', () => {
    expect(equal(0, 0)).toBe(true);
  });

  it('0 not equals 1', () => {
    expect(equal(0, 1)).toBe(false);
  });

  it('1 less than 2', () => {
    expect(lessThan(1, 2)).toBe(true);
  });

  it('2 not less than 1', () => {
    expect(lessThan(2, 1)).toBe(false);
  });

  it('2 greater than 1', () => {
    expect(greaterThan(2, 1)).toBe(true);
  });

  it('1 not greater than 2', () => {
    expect(greaterThan(1, 2)).toBe(false);
  });
});
