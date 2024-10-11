from comparison import Comparison

class TestComparison:
    def test_that_1_is_equal_to_1(self):
        comparison = Comparison()
        assert comparison.is_equal(1, 1) == True
    
    def test_that_1_is_not_equal_to_2(self):
        comparison = Comparison()
        assert not comparison.is_equal(1, 2)

    def test_is_equal_with_different_objects(self):
        comp = Comparison()
        assert comp.is_equal([1, 2, 3], [1, 2, 3]) == True

    def test_that_2_is_not_equal_to_1(self):
        comparison = Comparison()
        assert comparison.is_equal(2, 1) == False
    
    def test_that_1_is_less_than_2(self):
        comparison = Comparison()
        assert comparison.less_than(1, 2) == True
    
    def test_that_1_is_not_less_than_1(self):
        comparison = Comparison()
        assert comparison.less_than(1, 1) == False
    
    def test_that_1_is_greater_than_0(self):
        comparison = Comparison()
        assert comparison.greater_than(1, 0) == True
    
    def test_that_1_is_not_greater_than_1(self):
        comparison = Comparison()
        assert comparison.greater_than(1, 1) == False
